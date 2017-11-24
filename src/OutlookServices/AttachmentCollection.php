<?php


namespace Office365\PHP\Client\OutlookServices;

use Office365\PHP\Client\Runtime\ClientObjectCollection;
use Office365\PHP\Client\Runtime\CreateEntityQuery;
use Office365\PHP\Client\Runtime\ResourcePathEntity;


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
				new $attachmentType($this->getContext(), new ResourcePathEntity(
					$this->getContext(),
					$this->getResourcePath(),
					$attachmentId
				)));
		}
		return $this->getProperty("Attachments");
	}
}