<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : aruba-iot-nb-ble-data.proto
 */


namespace aruba_telemetry;

/**
 * Protobuf enum : aruba_telemetry.BleFrameType
 */
class BleFrameType extends \Protobuf\Enum
{

    /**
     * adv_ind = 0
     */
    const adv_ind_VALUE = 0;

    /**
     * adv_direct_ind = 1
     */
    const adv_direct_ind_VALUE = 1;

    /**
     * adv_nonconn_ind = 2
     */
    const adv_nonconn_ind_VALUE = 2;

    /**
     * scan_rsp = 4
     */
    const scan_rsp_VALUE = 4;

    /**
     * adv_scan_ind = 6
     */
    const adv_scan_ind_VALUE = 6;

    /**
     * @var \aruba_telemetry\BleFrameType
     */
    protected static $adv_ind = null;

    /**
     * @var \aruba_telemetry\BleFrameType
     */
    protected static $adv_direct_ind = null;

    /**
     * @var \aruba_telemetry\BleFrameType
     */
    protected static $adv_nonconn_ind = null;

    /**
     * @var \aruba_telemetry\BleFrameType
     */
    protected static $scan_rsp = null;

    /**
     * @var \aruba_telemetry\BleFrameType
     */
    protected static $adv_scan_ind = null;

    /**
     * @return \aruba_telemetry\BleFrameType
     */
    public static function adv_ind()
    {
        if (self::$adv_ind !== null) {
            return self::$adv_ind;
        }

        return self::$adv_ind = new self('adv_ind', self::adv_ind_VALUE);
    }

    /**
     * @return \aruba_telemetry\BleFrameType
     */
    public static function adv_direct_ind()
    {
        if (self::$adv_direct_ind !== null) {
            return self::$adv_direct_ind;
        }

        return self::$adv_direct_ind = new self('adv_direct_ind', self::adv_direct_ind_VALUE);
    }

    /**
     * @return \aruba_telemetry\BleFrameType
     */
    public static function adv_nonconn_ind()
    {
        if (self::$adv_nonconn_ind !== null) {
            return self::$adv_nonconn_ind;
        }

        return self::$adv_nonconn_ind = new self('adv_nonconn_ind', self::adv_nonconn_ind_VALUE);
    }

    /**
     * @return \aruba_telemetry\BleFrameType
     */
    public static function scan_rsp()
    {
        if (self::$scan_rsp !== null) {
            return self::$scan_rsp;
        }

        return self::$scan_rsp = new self('scan_rsp', self::scan_rsp_VALUE);
    }

    /**
     * @return \aruba_telemetry\BleFrameType
     */
    public static function adv_scan_ind()
    {
        if (self::$adv_scan_ind !== null) {
            return self::$adv_scan_ind;
        }

        return self::$adv_scan_ind = new self('adv_scan_ind', self::adv_scan_ind_VALUE);
    }

    /**
     * @param int $value
     * @return \aruba_telemetry\BleFrameType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::adv_ind();
            case 1: return self::adv_direct_ind();
            case 2: return self::adv_nonconn_ind();
            case 4: return self::scan_rsp();
            case 6: return self::adv_scan_ind();
            default: return null;
        }
    }


}
