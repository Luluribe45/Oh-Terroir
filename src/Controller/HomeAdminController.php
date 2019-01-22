<?php
namespace Controller;

class HomeAdminController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show()
    {
        return $this->twig->render('Admin/home.html.twig');
    }
}
