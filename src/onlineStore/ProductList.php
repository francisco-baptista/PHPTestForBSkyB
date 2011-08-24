<?php
/**
 * Product lists
 *
 * @package     BSkyB
 * @subpackage  BasketItemsClass
 * @category    BasketItems
 * @author      Francisco Baptista
 */
class ProductList implements ArrayAccess, Iterator 
{
	
	/**
	 * Products container
	 * 
	 * @var array
	 */
	private $container = array();
	
	/**
	 * Product codes
	 * 
	 * @var array
	 */
	private $codes = array();
	
	/**
	 * Position
	 * 
	 * @var integer
	 */
	private $position;
	
	/**
	 * Products count
	 * 
	 * @var integer
	 */
	private $productCount;
	
	/**
	 * Constructor sets {@link $container} and {@link $position}
	 * 
	 * @access public
	 */
	public function __construct()
	{
		$this->container	= array();
	    $this->position		= 0;
	}
	
	/**
	 * Return product count
	 * 
	 * @access public
	 * @return integer 
	 */
	public function productCount()
	{
		return count($this->container);
	}
	
	/**
	 * Adds the product
	 * 
	 * @access public
	 * @param integer $_offset
	 * @param  $_product
	 */
	public function offsetSet($_offset,  $_product)
	{
		
		// Type check... 
		if( ! $_product instanceof Product)
		{
			throw new InvalidArgumentException(Exceptions::INSTANCE_OF_PRODUCT);
		}
		
		if(in_array($_product->getCode(), $this->codes))
		{
			throw new InvalidArgumentException(Exceptions::PRODUCT_ALREADY_EXIST);
		}
		
		// ..
		if (is_null($_offset))
		{
			$this->container[]	= $_product;
			$this->codes[]		= $_product->getCode();
		} 
		else 
		{
			$this->container[$_offset]	= $_product;
			$this->codes[$_offset]		= $_product->getCode();
		}
	}
	
	/**
	 * Return product code
	 * 
	 * @access public
	 * @return array 
	 */
	public function getCodes()
	{
		return $this->codes;
	}
	
	/**
	 * Interface requirement
	 * 
	 * @access public
	 * @param $_offset
	 * @return boolean TRUE | FALSE
	 */
	public function offsetExists($_offset)
	{
		return isset ($this->container[$_offset]);
	}
	
	/**
	 * Interface requirement
	 * 
	 * @access public
	 * @param $_offset
	 * @return void
	 */
	public function offsetUnset($_offset)
	{
		unset ($this->container[$_offset]);
		unset ($this->codes[$_offset]);
	}
	
	/**
	 * Interface requirement
	 * 
	 * @access public
	 * @param $_offset
	 * @return Product $product | null
	 */
	public function offsetGet($_offset)
	{
		return isset ($this->container[$_offset]) ? $this->container [$_offset] : null;
	}

	/**
	 * Interface requirement
	 * 
	 * Resets the pointer position to zero
	 * 
	 * @access public
	 * @return void 
	 */
    public function rewind()
	{
        $this->position = 0;
    }

    /**
	 * Interface requirement
	 * 
	 * @access public
	 * @return Product $product
	 */
    public function current()
	{
        return $this->container[$this->position];
    }

    /**
	 * Interface requirement
	 * 
	 * @access public
	 * @return integer
	 */
    public function key() 
	{
        return $this->position;
    }

    /**
	 * Interface requirement
	 * 
	 * Move position pointer ahead
	 * 
	 * @access public
	 * @return void
	 */
    public function next()
	{
        ++$this->position;
    }

    /**
	 * Interface requirement
	 * 
	 * @access public
	 * @return integer
	 */
    public function valid()
	{
        return isset($this->container[$this->position]);
    }
}