<?php


namespace Office365\OutlookServices;

use Office365\OutlookServices\Attachment;
use Office365\OutlookServices\FileAttachment;
use Office365\OutlookServices\ItemAttachment;
use Office365\Runtime\Actions\CreateEntityQuery;
use Office365\Runtime\ClientObjectCollection;
use Office365\Runtime\ResourcePath;


class AttachmentCollection extends ClientObjectCollection
{
	/**
	 * Creates a Draft Message resource
	 * @param string $attachmentType
	 * @return Attachment|FileAttachment|ItemAttachment
	 */
	public function createAttachment($attachmentType = FileAttachment::class) {
		$attachment = new $attachmentType($this->getContext());
		$qry = new CreateEntityQuery($this, $attachment);
		$this->getContext()->addQuery($qry, $attachment);
		$this->addChild($attachment);
		return $attachment;
	}

	/**
	 * @param $attachmentId
	 * @param $attachmentType
	 * @return Attachment|FileAttachment|ItemAttachment
	 * @internal param $messageId
	 */
	public function getAttachment($attachmentId, $attachmentType = FileAttachment::class)
	{
		if (!$this->isPropertyAvailable("Attachments")) {
			$this->setProperty("Attachments",
				new $attachmentType($this->getContext(), new ResourcePath(
                    $attachmentId,
					$this->getResourcePath()
				)));
		}
		return $this->getProperty("Attachments");
	}
}
