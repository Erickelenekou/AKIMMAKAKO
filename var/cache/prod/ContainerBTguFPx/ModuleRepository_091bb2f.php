<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb8b9c = null;
    private $initializer62c32 = null;
    private static $publicPropertiesc2f07 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getList', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getInstalledModules', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getMustBeConfiguredModules', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getUpgradableModules', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'setActionUrls', array('collection' => $collection), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer62c32 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderb8b9c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderb8b9c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderb8b9c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__get', ['name' => $name], $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        if (isset(self::$publicPropertiesc2f07[$name])) {
            return $this->valueHolderb8b9c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8b9c;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb8b9c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8b9c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb8b9c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__isset', array('name' => $name), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8b9c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb8b9c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__unset', array('name' => $name), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8b9c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb8b9c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__clone', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        $this->valueHolderb8b9c = clone $this->valueHolderb8b9c;
    }
    public function __sleep()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__sleep', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return array('valueHolderb8b9c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer62c32 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer62c32;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'initializeProxy', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8b9c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8b9c;
    }
}
