<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-nb-status.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf message : aruba_telemetry.Status
 */
class Status extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * deviceMac optional bytes = 1
     *
     * @var \Protobuf\Stream
     */
    protected $deviceMac = null;

    /**
     * status optional enum = 2
     *
     * @var \aruba_telemetry\statusValue
     */
    protected $status = null;

    /**
     * statusString optional string = 3
     *
     * @var string
     */
    protected $statusString = null;

    /**
     * Check if 'deviceMac' has a value
     *
     * @return bool
     */
    public function hasDeviceMac()
    {
        return $this->deviceMac !== null;
    }

    /**
     * Get 'deviceMac' value
     *
     * @return \Protobuf\Stream
     */
    public function getDeviceMac()
    {
        return $this->deviceMac;
    }

    /**
     * Set 'deviceMac' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setDeviceMac($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->deviceMac = $value;
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return \aruba_telemetry\statusValue
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param \aruba_telemetry\statusValue $value
     */
    public function setStatus(\aruba_telemetry\statusValue $value = null)
    {
        $this->status = $value;
    }

    /**
     * Check if 'statusString' has a value
     *
     * @return bool
     */
    public function hasStatusString()
    {
        return $this->statusString !== null;
    }

    /**
     * Get 'statusString' value
     *
     * @return string
     */
    public function getStatusString()
    {
        return $this->statusString;
    }

    /**
     * Set 'statusString' value
     *
     * @param string $value
     */
    public function setStatusString($value = null)
    {
        $this->statusString = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'deviceMac' => null,
            'status' => null,
            'statusString' => null
        ], $values);

        $message->setDeviceMac($values['deviceMac']);
        $message->setStatus($values['status']);
        $message->setStatusString($values['statusString']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Status',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'deviceMac',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.aruba_telemetry.statusValue'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'statusString',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->deviceMac !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeByteStream($stream, $this->deviceMac);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->status->value());
        }

        if ($this->statusString !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->statusString);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->deviceMac = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->status = \aruba_telemetry\statusValue::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->statusString = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->deviceMac !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->deviceMac);
        }

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status->value());
        }

        if ($this->statusString !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->statusString);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->deviceMac = null;
        $this->status = null;
        $this->statusString = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \aruba_telemetry\Status) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->deviceMac = ($message->deviceMac !== null) ? $message->deviceMac : $this->deviceMac;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->statusString = ($message->statusString !== null) ? $message->statusString : $this->statusString;
    }


}
