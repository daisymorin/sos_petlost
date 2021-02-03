<?php

namespace ContainerX0x9hxT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf180c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7664f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25ba2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getConnection', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getMetadataFactory', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getExpressionBuilder', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'beginTransaction', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getCache', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'transactional', array('func' => $func), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->transactional($func);
    }

    public function commit()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'commit', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->commit();
    }

    public function rollback()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'rollback', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'createQuery', array('dql' => $dql), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'createQueryBuilder', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'flush', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'clear', array('entityName' => $entityName), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'close', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->close();
    }

    public function persist($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'persist', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'remove', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'refresh', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'detach', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'merge', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'contains', array('entity' => $entity), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getEventManager', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getConfiguration', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'isOpen', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getUnitOfWork', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getProxyFactory', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'getFilters', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'isFiltersStateClean', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'hasFilters', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return $this->valueHolderf180c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7664f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf180c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf180c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf180c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__get', ['name' => $name], $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        if (isset(self::$publicProperties25ba2[$name])) {
            return $this->valueHolderf180c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf180c;

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

        $targetObject = $this->valueHolderf180c;
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
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf180c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf180c;
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
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__isset', array('name' => $name), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf180c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf180c;
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
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__unset', array('name' => $name), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf180c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf180c;
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
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__clone', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        $this->valueHolderf180c = clone $this->valueHolderf180c;
    }

    public function __sleep()
    {
        $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, '__sleep', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;

        return array('valueHolderf180c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7664f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7664f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7664f && ($this->initializer7664f->__invoke($valueHolderf180c, $this, 'initializeProxy', array(), $this->initializer7664f) || 1) && $this->valueHolderf180c = $valueHolderf180c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf180c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf180c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
