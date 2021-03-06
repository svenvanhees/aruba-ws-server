<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-sb-status.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf message : aruba_telemetry.ConnectStatus
 */
class ConnectStatus extends \Protobuf\AbstractMessage
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
     * connectCode optional enum = 1
     *
     * @var \aruba_telemetry\ConnectCode
     */
    protected $connectCode = null;

    /**
     * connectDescription optional string = 2
     *
     * @var string
     */
    protected $connectDescription = null;

    /**
     * Check if 'connectCode' has a value
     *
     * @return bool
     */
    public function hasConnectCode()
    {
        return $this->connectCode !== null;
    }

    /**
     * Get 'connectCode' value
     *
     * @return \aruba_telemetry\ConnectCode
     */
    public function getConnectCode()
    {
        return $this->connectCode;
    }

    /**
     * Set 'connectCode' value
     *
     * @param \aruba_telemetry\ConnectCode $value
     */
    public function setConnectCode(\aruba_telemetry\ConnectCode $value = null)
    {
        $this->connectCode = $value;
    }

    /**
     * Check if 'connectDescription' has a value
     *
     * @return bool
     */
    public function hasConnectDescription()
    {
        return $this->connectDescription !== null;
    }

    /**
     * Get 'connectDescription' value
     *
     * @return string
     */
    public function getConnectDescription()
    {
        return $this->connectDescription;
    }

    /**
     * Set 'connectDescription' value
     *
     * @param string $value
     */
    public function setConnectDescription($value = null)
    {
        $this->connectDescription = $value;
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
            'connectCode' => null,
            'connectDescription' => null
        ], $values);

        $message->setConnectCode($values['connectCode']);
        $message->setConnectDescription($values['connectDescription']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ConnectStatus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'connectCode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.aruba_telemetry.ConnectCode'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'connectDescription',
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

        if ($this->connectCode !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->connectCode->value());
        }

        if ($this->connectDescription !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->connectDescription);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->connectCode = \aruba_telemetry\ConnectCode::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->connectDescription = $reader->readString($stream);

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

        if ($this->connectCode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->connectCode->value());
        }

        if ($this->connectDescription !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->connectDescription);
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
        $this->connectCode = null;
        $this->connectDescription = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \aruba_telemetry\ConnectStatus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->connectCode = ($message->connectCode !== null) ? $message->connectCode : $this->connectCode;
        $this->connectDescription = ($message->connectDescription !== null) ? $message->connectDescription : $this->connectDescription;
    }


}

