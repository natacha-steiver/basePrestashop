<?php
//Création d'un premier module
//!!! structure = dossier à le même nom que le fichier php

//vérifie la version de prestashop
if (!defined('_PS_VERSION_')) {
  exit;
}

//Crée une classe  qui est étendue par Module
class MyModule extends Module
{
  //Construct permet d'être appelé automatiquement lorsque l'on crée une nouvelle instance (new ...)
  public function __construct()
  {
    //Définis les propriétés du module
    $this->name = 'mymodule';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Firstname Lastname';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    //toujours faire appel au construct parent avant le displayname
    parent::__construct();

    $this->displayName = $this->l('My module');
    $this->description = $this->l('Description of my module.');

    //message de confirmation de désinstallation du module
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    //Message d'erreur si le module n'est pas configuré dans la db
    if (!Configuration::get('MYMODULE_NAME')) {
      $this->warning = $this->l('No name provided');
    }
  }

  //nb hook de position se situe dans menu modules position greffer module et ne marche pas si je mets dans fichier externe
  //hook colonne gauche
  public function hookDisplayLeftColumn($params)
  {
    $this->context->smarty->assign(
      array(
        'my_module_name' => Configuration::get('MYMODULE_NAME'),
        'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
      )
    );
    return $this->display(__FILE__, 'mymodule.tpl');
  }


  //hook colonne droite
  public function hookDisplayRightColumn($params)
  {
    return $this->hookDisplayLeftColumn($params);
  }

  public function hookDisplayHeader()
  {
    $this->context->controller->addCSS($this->_path.'css/mymodule.css', 'all');
  }


  //Vérifie si le module est correctement installé
  public function install()
  {

    if (Shop::isFeatureActive()) {
      Shop::setContext(Shop::CONTEXT_ALL);
    }
    //Définis où se situe le module
    if (!parent::install() ||
    !$this->registerHook('leftColumn') ||
    !$this->registerHook('header') ||
    !Configuration::updateValue('MYMODULE_NAME', 'mymodule')

  ) {
    return false;
  }

  return true;

}

//Vérifie si le module est correctement desinstallé
public function uninstall()
{
  if (!parent::uninstall() ||
  !Configuration::deleteByName('MYMODULE_NAME')
) {
  return false;
}

return true;
}



}
