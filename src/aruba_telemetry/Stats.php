<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-nb-telemetry.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf message : aruba_telemetry.Stats
 */
class Stats extends \Protobuf\AbstractMessage
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
     * uptime optional uint64 = 1
     *
     * @var int
     */
    protected $uptime = null;

    /**
     * adv_cnt optional uint64 = 2
     *
     * @var int
     */
    protected $adv_cnt = null;

    /**
     * seq_nr optional uint32 = 3
     *
     * @var int
     */
    protected $seq_nr = null;

    /**
     * frame_cnt required uint32 = 4
     *
     * @var int
     */
    protected $frame_cnt = null;

    /**
     * Check if 'uptime' has a value
     *
     * @return bool
     */
    public function hasUptime()
    {
        return $this->uptime !== null;
    }

    /**
     * Get 'uptime' value
     *
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set 'uptime' value
     *
     * @param int $value
     */
    public function setUptime($value = null)
    {
        $this->uptime = $value;
    }

    /**
     * Check if 'adv_cnt' has a value
     *
     * @return bool
     */
    public function hasAdvCnt()
    {
        return $this->adv_cnt !== null;
    }

    /**
     * Get 'adv_cnt' value
     *
     * @return int
     */
    public function getAdvCnt()
    {
        return $this->adv_cnt;
    }

    /**
     * Set 'adv_cnt' value
     *
     * @param int $value
     */
    public function setAdvCnt($value = null)
    {
        $this->adv_cnt = $value;
    }

    /**
     * Check if 'seq_nr' has a value
     *
     * @return bool
     */
    public function hasSeqNr()
    {
        return $this->seq_nr !== null;
    }

    /**
     * Get 'seq_nr' value
     *
     * @return int
     */
    public function getSeqNr()
    {
        return $this->seq_nr;
    }

    /**
     * Set 'seq_nr' value
     *
     * @param int $value
     */
    public function setSeqNr($value = null)
    {
        $this->seq_nr = $value;
    }

    /**
     * Check if 'frame_cnt' has a value
     *
     * @return bool
     */
    public function hasFrameCnt()
    {
        return $this->frame_cnt !== null;
    }

    /**
     * Get 'frame_cnt' value
     *
     * @return int
     */
    public function getFrameCnt()
    {
        return $this->frame_cnt;
    }

    /**
     * Set 'frame_cnt' value
     *
     * @param int $value
     */
    public function setFrameCnt($value)
    {
        $this->frame_cnt = $value;
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
        if ( ! isset($values['frame_cnt'])) {
            throw new \InvalidArgumentException('Field "frame_cnt" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'uptime' => null,
            'adv_cnt' => null,
            'seq_nr' => null,
        ], $values);

        $message->setUptime($values['uptime']);
        $message->setAdvCnt($values['adv_cnt']);
        $message->setSeqNr($values['seq_nr']);
        $message->setFrameCnt($values['frame_cnt']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Stats',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'uptime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'adv_cnt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'seq_nr',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'frame_cnt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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

        if ($this->frame_cnt === null) {
            throw new \UnexpectedValueException('Field "\\aruba_telemetry\\Stats#frame_cnt" (tag 4) is required but has no value.');
        }

        if ($this->uptime !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->uptime);
        }

        if ($this->adv_cnt !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->adv_cnt);
        }

        if ($this->seq_nr !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->seq_nr);
        }

        if ($this->frame_cnt !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->frame_cnt);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->uptime = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->adv_cnt = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->seq_nr = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->frame_cnt = $reader->readVarint($stream);

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

        if ($this->uptime !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->uptime);
        }

        if ($this->adv_cnt !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->adv_cnt);
        }

        if ($this->seq_nr !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->seq_nr);
        }

        if ($this->frame_cnt !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->frame_cnt);
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
        $this->uptime = null;
        $this->adv_cnt = null;
        $this->seq_nr = null;
        $this->frame_cnt = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \aruba_telemetry\Stats) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->uptime = ($message->uptime !== null) ? $message->uptime : $this->uptime;
        $this->adv_cnt = ($message->adv_cnt !== null) ? $message->adv_cnt : $this->adv_cnt;
        $this->seq_nr = ($message->seq_nr !== null) ? $message->seq_nr : $this->seq_nr;
        $this->frame_cnt = ($message->frame_cnt !== null) ? $message->frame_cnt : $this->frame_cnt;
    }


}
