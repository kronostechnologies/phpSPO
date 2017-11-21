<?php


namespace Office365\PHP\Client\OutlookServices;

use Office365\PHP\Client\Runtime\ResourcePathEntity;
use Office365\PHP\Client\Runtime\InvokePostMethodQuery;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;
use Office365\PHP\Client\Runtime\ClientValueObject;

class MailFolder extends OutlookEntity
{
    /**
     * The number of folders in the folder.
     * @var int
     */
    public $ChildFolderCount;

    /**
     * @return MessageCollection
     */
    public function getMessages()
    {
        if (!$this->isPropertyAvailable("Messages")) {
            $this->setProperty("Messages",
                new MessageCollection($this->getContext(), new ResourcePathEntity(
                    $this->getContext(),
                    $this->getResourcePath(),
                    "Messages"
                )));
        }
        return $this->getProperty("Messages");
    }

    /**
     * @return MailFolderCollection
     */
    public function getChildFolders()
    {
        if (!$this->isPropertyAvailable("ChildFolders")) {
            $this->setProperty("ChildFolders",
                new MailFolderCollection($this->getContext(), new ResourcePathEntity(
                    $this->getContext(),
                    $this->getResourcePath(),
                    "ChildFolders"
                )));
        }

        return $this->getProperty("ChildFolders");
    }
    
    public function renameFolder($name){
        $this->setProperty('DisplayName',$name);
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQuery($qry,$this);
    }
    
    public function moveFolder($destinationId){
        $payload = new ClientValueObject();
        $payload->setProperty("DestinationId",$destinationId);
        $qry = new InvokePostMethodQuery($this,"Move",null,$payload);
        $this->getContext()->addQuery($qry);
    }
}