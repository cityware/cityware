<?php

return array(
    'view_helpers' => array(
        'invokables' => array(
            'currency' => 'Cityware\View\Helper\Currency',
            'number' => 'Cityware\View\Helper\Number',
            
            //Alert
            'alert' => 'Cityware\Bootstrap\View\Helper\Alert',
            //Badge
            'badge' => 'Cityware\Bootstrap\View\Helper\Badge',
            //Button group
            'buttonGroup' => 'Cityware\Bootstrap\View\Helper\ButtonGroup',
            //DropDown
            'dropDown' => 'Cityware\Bootstrap\View\Helper\DropDown',
            //Form
            'form' => 'Cityware\Bootstrap\Form\View\Helper\Form',
            'formButton' => 'Cityware\Bootstrap\Form\View\Helper\FormButton',
            'formSubmit' => 'Cityware\Bootstrap\Form\View\Helper\FormButton',
            'formCheckbox' => 'Cityware\Bootstrap\Form\View\Helper\FormCheckbox',
            'formCollection' => 'Cityware\Bootstrap\Form\View\Helper\FormCollection',
            'formElementErrors' => 'Cityware\Bootstrap\Form\View\Helper\FormElementErrors',
            'formMultiCheckbox' => 'Cityware\Bootstrap\Form\View\Helper\FormMultiCheckbox',
            'formRadio' => 'Cityware\Bootstrap\Form\View\Helper\FormRadio',
            'formRow' => 'Cityware\Bootstrap\Form\View\Helper\FormRow',
            'formStatic' => 'Cityware\Bootstrap\Form\View\Helper\FormStatic',
            //Form Errors
            'formErrors' => 'Cityware\Bootstrap\Form\View\Helper\FormErrors',
            //Glyphicon
            'glyphicon' => 'Cityware\Bootstrap\View\Helper\Glyphicon',
            //FontAwesome
            'fontAwesome' => 'Cityware\Bootstrap\View\Helper\FontAwesome',
            //Label
            'label' => 'Cityware\Bootstrap\View\Helper\Label',
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
    
    'bootstrap' => array (
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
