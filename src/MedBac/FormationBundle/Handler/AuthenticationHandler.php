<?php
namespace MedBac\FormationBundle\Handler;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class AuthenticationHandler
implements AuthenticationSuccessHandlerInterface,
           AuthenticationFailureHandlerInterface
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
	     $referer_url = $request->headers->get('referer');
 if ($request->isXmlHttpRequest()) {
		$json = array(
				'x' => new RedirectResponse($referer_url),'success' => true

			);
        $response = new Response(json_encode($json));
            $response->headers->set('Content-Type', 'application/json');
			return $response;
    }}

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        
        if ($request->isXmlHttpRequest()) {
		$json = array(
				'has_error'	=> true,
				'error'     => $exception->getMessage(),
				'success' => true

			);
            
			 $response = new Response(json_encode($json));
            $response->headers->set('Content-Type', 'application/json');
			return $response;
        } else {
		return parent::onAuthenticationFailure($request, $exception);
        }
    }
}