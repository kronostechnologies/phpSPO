<?php


namespace Office365\OutlookServices;


use Office365\Runtime\Actions\InvokePostMethodQuery;
use Office365\Runtime\Actions\UpdateEntityQuery;
use Office365\Runtime\ResourcePath;

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
                new MessageCollection($this->getContext(),
                    new ResourcePath("Messages",$this->getResourcePath())));
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
                new MailFolderCollection($this->getContext(), new ResourcePath(
                    "ChildFolders",
                    $this->getResourcePath()
                )));
        }

        return $this->getProperty("ChildFolders");
    }

    public function renameFolder($name){
        $this->setProperty('DisplayName',$name);
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }

    public function moveFolder($destinationId){
        $parameters = [];
        $parameters["DestinationId"] = $destinationId;

        $qry = new InvokePostMethodQuery($this,"Move", null, null, $parameters);
        $this->getContext()->addQuery($qry);
    }
}
