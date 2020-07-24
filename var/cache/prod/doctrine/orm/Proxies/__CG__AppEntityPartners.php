<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Partners extends \App\Entity\Partners implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img1', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img2', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img3', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img4', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img5', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img6', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img7', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img8', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img9', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img10'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img1', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img2', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img3', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img4', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img5', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img6', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img7', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img8', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img9', '' . "\0" . 'App\\Entity\\Partners' . "\0" . 'img10'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Partners $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(string $category): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg1', []);

        return parent::getImg1();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg1(string $img1): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg1', [$img1]);

        return parent::setImg1($img1);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg2', []);

        return parent::getImg2();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg2(?string $img2): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg2', [$img2]);

        return parent::setImg2($img2);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg3', []);

        return parent::getImg3();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg3(?string $img3): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg3', [$img3]);

        return parent::setImg3($img3);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg4(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg4', []);

        return parent::getImg4();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg4(?string $img4): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg4', [$img4]);

        return parent::setImg4($img4);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg5(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg5', []);

        return parent::getImg5();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg5(?string $img5): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg5', [$img5]);

        return parent::setImg5($img5);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg6(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg6', []);

        return parent::getImg6();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg6(?string $img6): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg6', [$img6]);

        return parent::setImg6($img6);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg7(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg7', []);

        return parent::getImg7();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg7(?string $img7): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg7', [$img7]);

        return parent::setImg7($img7);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg8(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg8', []);

        return parent::getImg8();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg8(?string $img8): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg8', [$img8]);

        return parent::setImg8($img8);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg9(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg9', []);

        return parent::getImg9();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg9(string $img9): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg9', [$img9]);

        return parent::setImg9($img9);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg10(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg10', []);

        return parent::getImg10();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg10(?string $img10): \App\Entity\Partners
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg10', [$img10]);

        return parent::setImg10($img10);
    }

}