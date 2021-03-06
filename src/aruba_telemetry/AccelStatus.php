<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-nb-telemetry.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf enum : aruba_telemetry.AccelStatus
 */
class AccelStatus extends \Protobuf\Enum
{

    /**
     * ok = 0
     */
    const ok_VALUE = 0;

    /**
     * outOfRange = 1
     */
    const outOfRange_VALUE = 1;

    /**
     * threshold1 = 2
     */
    const threshold1_VALUE = 2;

    /**
     * threshold2 = 3
     */
    const threshold2_VALUE = 3;

    /**
     * @var \aruba_telemetry\AccelStatus
     */
    protected static $ok = null;

    /**
     * @var \aruba_telemetry\AccelStatus
     */
    protected static $outOfRange = null;

    /**
     * @var \aruba_telemetry\AccelStatus
     */
    protected static $threshold1 = null;

    /**
     * @var \aruba_telemetry\AccelStatus
     */
    protected static $threshold2 = null;

    /**
     * @return \aruba_telemetry\AccelStatus
     */
    public static function ok()
    {
        if (self::$ok !== null) {
            return self::$ok;
        }

        return self::$ok = new self('ok', self::ok_VALUE);
    }

    /**
     * @return \aruba_telemetry\AccelStatus
     */
    public static function outOfRange()
    {
        if (self::$outOfRange !== null) {
            return self::$outOfRange;
        }

        return self::$outOfRange = new self('outOfRange', self::outOfRange_VALUE);
    }

    /**
     * @return \aruba_telemetry\AccelStatus
     */
    public static function threshold1()
    {
        if (self::$threshold1 !== null) {
            return self::$threshold1;
        }

        return self::$threshold1 = new self('threshold1', self::threshold1_VALUE);
    }

    /**
     * @return \aruba_telemetry\AccelStatus
     */
    public static function threshold2()
    {
        if (self::$threshold2 !== null) {
            return self::$threshold2;
        }

        return self::$threshold2 = new self('threshold2', self::threshold2_VALUE);
    }

    /**
     * @param int $value
     * @return \aruba_telemetry\AccelStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::ok();
            case 1: return self::outOfRange();
            case 2: return self::threshold1();
            case 3: return self::threshold2();
            default: return null;
        }
    }


}

