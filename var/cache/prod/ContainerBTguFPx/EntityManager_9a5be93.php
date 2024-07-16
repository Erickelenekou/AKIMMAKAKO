<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb8b9c = null;
    private $initializer62c32 = null;
    private static $publicPropertiesc2f07 = [
        
    ];
    public function getConnection()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getConnection', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getMetadataFactory', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getExpressionBuilder', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'beginTransaction', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getCache', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'transactional', array('func' => $func), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'commit', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->commit();
    }
    public function rollback()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'rollback', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getClassMetadata', array('className' => $className), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'createQuery', array('dql' => $dql), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'createNamedQuery', array('name' => $name), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'createQueryBuilder', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'flush', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'clear', array('entityName' => $entityName), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->clear($entityName);
    }
    public function close()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'close', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->close();
    }
    public function persist($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'persist', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'remove', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'refresh', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'detach', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'merge', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'contains', array('entity' => $entity), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getEventManager', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getConfiguration', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'isOpen', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getUnitOfWork', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getProxyFactory', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'initializeObject', array('obj' => $obj), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'getFilters', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'isFiltersStateClean', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, 'hasFilters', array(), $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        return $this->valueHolderb8b9c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer62c32 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb8b9c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb8b9c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb8b9c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer62c32 && ($this->initializer62c32->__invoke($valueHolderb8b9c, $this, '__get', ['name' => $name], $this->initializer62c32) || 1) && $this->valueHolderb8b9c = $valueHolderb8b9c;
        if (isset(self::$publicPropertiesc2f07[$name])) {
            return $this->valueHolderb8b9c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
