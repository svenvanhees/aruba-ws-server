<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-nb-status.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf enum : aruba_telemetry.statusValue
 */
class statusValue extends \Protobuf\Enum
{

    /**
     * deviceDisconnected = 0
     */
    const deviceDisconnected_VALUE = 0;

    /**
     * inactivityTimeout = 1
     */
    const inactivityTimeout_VALUE = 1;

    /**
     * @var \aruba_telemetry\statusValue
     */
    protected static $deviceDisconnected = null;

    /**
     * @var \aruba_telemetry\statusValue
     */
    protected static $inactivityTimeout = null;

    /**
     * @return \aruba_telemetry\statusValue
     */
    public static function deviceDisconnected()
    {
        if (self::$deviceDisconnected !== null) {
            return self::$deviceDisconnected;
        }

        return self::$deviceDisconnected = new self('deviceDisconnected', self::deviceDisconnected_VALUE);
    }

    /**
     * @return \aruba_telemetry\statusValue
     */
    public static function inactivityTimeout()
    {
        if (self::$inactivityTimeout !== null) {
            return self::$inactivityTimeout;
        }

        return self::$inactivityTimeout = new self('inactivityTimeout', self::inactivityTimeout_VALUE);
    }

    /**
     * @param int $value
     * @return \aruba_telemetry\statusValue
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::deviceDisconnected();
            case 1: return self::inactivityTimeout();
            default: return null;
        }
    }


}
