<?php
// auto-generated by sfViewConfigHandler
// date: 2010/09/06 11:06:01
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'editSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'editSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('custom.css', '', array ());
  $response->addStylesheet('jquery.fancybox.css', '', array ());
  $response->addStylesheet('jwysiwyg/jquery.wysiwyg.css', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('base.js', '', array ());
  $response->addJavascript('jquery.fancybox.js', '', array ());
  $response->addJavascript('jwysiwyg/jquery.wysiwyg.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('custom.css', '', array ());
  $response->addStylesheet('jquery.fancybox.css', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('base.js', '', array ());
  $response->addJavascript('jquery.fancybox.js', '', array ());
}

