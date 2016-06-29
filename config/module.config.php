<?php

return array(
    'view_helpers' => array(
        'invokables' => array(
            'currency' => 'Cityware\View\Helper\Currency',
            'number' => 'Cityware\View\Helper\Number',
            
            //Alert
            'alert' => 'Cityware\Bootstrap\View\Helper\BootstrapAlert',
            //Badge
            'badge' => 'Cityware\Bootstrap\View\Helper\BootstrapBadge',
            //Button group
            'buttonGroup' => 'Cityware\Bootstrap\View\Helper\BootstrapButtonGroup',
            //DropDown
            'dropDown' => 'Cityware\Bootstrap\View\Helper\BootstrapDropDown',
            //Form
            'form' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapForm',
            'formButton' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormButton',
            'formSubmit' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormButton',
            'formCheckbox' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormCheckbox',
            'formCollection' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormCollection',
            'formElementErrors' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormElementErrors',
            'formMultiCheckbox' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormMultiCheckbox',
            'formRadio' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormRadio',
            'formRow' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormRow',
            'formStatic' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormStatic',
            //Form Errors
            'formErrors' => 'Cityware\Bootstrap\Form\View\Helper\BootstrapFormErrors',
            //Glyphicon
            'glyphicon' => 'Cityware\Bootstrap\View\Helper\BootstrapGlyphicon',
            //FontAwesome
            'fontAwesome' => 'Cityware\Bootstrap\View\Helper\BootstrapFontAwesome',
            //Label
            'label' => 'Cityware\Bootstrap\View\Helper\BootstrapLabel',
        ),
        'factories' => array (
            'formElement' => 'Cityware\Bootstrap\Form\View\Helper\FactoryFormElementFactory',
        )
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'getParam' => 'Cityware\Mvc\Controller\Plugins\GetParam',
            'setParam' => 'Cityware\Mvc\Controller\Plugins\SetParam',
            'getAllParams' => 'Cityware\Mvc\Controller\Plugins\GetAllParams',
        )
    ),
    'global_variables' => array(
        
    ),
    
    'cityBootstrap' => array (
        'ignoredViewHelpers' => array (
            'file',
            'checkbox',
            'radio',
            'submit',
            'multi_checkbox',
            'static',
            'button',
            'reset'
        ),
        'type_map' => array(),
        'class_map' => array(),
    ),
    'service_manager' => array (
        'factories' => array (
            'Cityware\Bootstrap\Options\ModuleOptions' => 'Cityware\Bootstrap\Options\Factory\ModuleOptionsFactory'
        )
    ),
    
);
