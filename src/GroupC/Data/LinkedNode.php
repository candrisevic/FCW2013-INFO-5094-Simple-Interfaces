<?php
/**
 *ILinkedNode
 *
 *@package Data
 */
namespace GroupC\Data;

/**
 *@ignore
 */
defined('IN_LIB') or die;

   /**
    *LinkedNode
    *
    *@version 1.0
    *@author Group C
    *@copyright Group C 2013
    */
class LinkedNode extends \GroupC\Data\Node implements \GroupC\Data\ILinkedNode
{
    
    /**
     *@access private
     *@var ILinkedNode Hold the refernce to the next node
     */     
    private $next = null;
    
    /**
     * Returns the next ILinkedNode.
     *
     * @access public
     * @return ILinkedNode|null Returns the next ILinkedNode instance if it exists, otherwise returns NULL.
     */
    public function getNext()
    {
        return isset($this->next) ? $this->next : null;
    }

    /**
     * Sets the next ILinkedNode instance.
     *
     * The `next` ILinkedNode should be the ILinkedNode instance that comes after
     * this instance within a List.
     *
     * @access public
     * @param ILinkedNode The ILinkedNode instance that is next.
     */    
    public function setNext(ILinkedNode $next)
    {
        //throw exceptions
        $this->next = $next;
    }
}
