<?php

namespace Proxies\__CG__\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Quest extends \CoreBundle\Entity\Quest implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', 'user', 'brand', 'gallery', 'visible', 'complexity', 'sms', 'phone', 'types', 'inprogress', 'online_table', 'recomendate', 'time', 'primeDate', 'open', 'occulto', 'startTime', 'city', 'lat', 'lng', 'maxCount', 'count', 'plusPay', 'originalBackground', 'background', 'addres', 'site', 'id', 'title', 'description', 'originalImage', 'image'];
        }

        return ['__isInitialized__', 'user', 'brand', 'gallery', 'visible', 'complexity', 'sms', 'phone', 'types', 'inprogress', 'online_table', 'recomendate', 'time', 'primeDate', 'open', 'occulto', 'startTime', 'city', 'lat', 'lng', 'maxCount', 'count', 'plusPay', 'originalBackground', 'background', 'addres', 'site', 'id', 'title', 'description', 'originalImage', 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Quest $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPrimeDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimeDate', []);

        return parent::getPrimeDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimeDate($primeDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimeDate', [$primeDate]);

        return parent::setPrimeDate($primeDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddres', []);

        return parent::getAddres();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddres($addres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddres', [$addres]);

        return parent::setAddres($addres);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite($site)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackground()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackground', []);

        return parent::getBackground();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackground($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackground', [$image]);

        return parent::setBackground($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getGallery()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGallery', []);

        return parent::getGallery();
    }

    /**
     * {@inheritDoc}
     */
    public function setGallery($gallery)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGallery', [$gallery]);

        return parent::setGallery($gallery);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalBackground()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalBackground', []);

        return parent::getOriginalBackground();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalBackground($originalImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalBackground', [$originalImage]);

        return parent::setOriginalBackground($originalImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxCount', []);

        return parent::getMaxCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxCount($maxCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxCount', [$maxCount]);

        return parent::setMaxCount($maxCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCount', []);

        return parent::getCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setCount($count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCount', [$count]);

        return parent::setCount($count);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlusPay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlusPay', []);

        return parent::getPlusPay();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlusPay($plusPay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlusPay', [$plusPay]);

        return parent::setPlusPay($plusPay);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', []);

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat($lat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', [$lat]);

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLng', []);

        return parent::getLng();
    }

    /**
     * {@inheritDoc}
     */
    public function setLng($lng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLng', [$lng]);

        return parent::setLng($lng);
    }

    /**
     * {@inheritDoc}
     */
    public function setLatLng($latlng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatLng', [$latlng]);

        return parent::setLatLng($latlng);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatLng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatLng', []);

        return parent::getLatLng();
    }

    /**
     * {@inheritDoc}
     */
    public function getTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTime', []);

        return parent::getTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTime($time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTime', [$time]);

        return parent::setTime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getInprogress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInprogress', []);

        return parent::getInprogress();
    }

    /**
     * {@inheritDoc}
     */
    public function setInprogress($inprogress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInprogress', [$inprogress]);

        return parent::setInprogress($inprogress);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpen', []);

        return parent::getOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpen($open)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpen', [$open]);

        return parent::setOpen($open);
    }

    /**
     * {@inheritDoc}
     */
    public function addOpen($open)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOpen', [$open]);

        return parent::addOpen($open);
    }

    /**
     * {@inheritDoc}
     */
    public function addPrimeDate($pr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrimeDate', [$pr]);

        return parent::addPrimeDate($pr);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOpen(\CoreBundle\Entity\Visit $open)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOpen', [$open]);

        return parent::removeOpen($open);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplexity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplexity', []);

        return parent::getComplexity();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplexity($complexity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplexity', [$complexity]);

        return parent::setComplexity($complexity);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartTime', []);

        return parent::getStartTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartTime($startTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartTime', [$startTime]);

        return parent::setStartTime($startTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSms', []);

        return parent::getSms();
    }

    /**
     * {@inheritDoc}
     */
    public function setSms($sms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSms', [$sms]);

        return parent::setSms($sms);
    }

    /**
     * {@inheritDoc}
     */
    public function getOcculto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOcculto', []);

        return parent::getOcculto();
    }

    /**
     * {@inheritDoc}
     */
    public function setOcculto($occulto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOcculto', [$occulto]);

        return parent::setOcculto($occulto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypes', []);

        return parent::getTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypes($types)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypes', [$types]);

        return parent::setTypes($types);
    }

    /**
     * {@inheritDoc}
     */
    public function addType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addType', [$type]);

        return parent::addType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnlineTable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnlineTable', []);

        return parent::getOnlineTable();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnlineTable($online_table)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnlineTable', [$online_table]);

        return parent::setOnlineTable($online_table);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecomendate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecomendate', []);

        return parent::getRecomendate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecomendate($recomendate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecomendate', [$recomendate]);

        return parent::setRecomendate($recomendate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrand', []);

        return parent::getBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrand($brand)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrand', [$brand]);

        return parent::setBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadRootDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadRootDir', []);

        return parent::getUploadRootDir();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadDir', []);

        return parent::getUploadDir();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', []);

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalImage', []);

        return parent::getOriginalImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalImage($originalImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalImage', [$originalImage]);

        return parent::setOriginalImage($originalImage);
    }

}
