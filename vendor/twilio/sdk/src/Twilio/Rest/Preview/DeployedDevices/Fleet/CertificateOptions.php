<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\DeployedDevices\Fleet;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class CertificateOptions {
    /**
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     * @return CreateCertificateOptions Options builder
     */
    public static function create(string $friendlyName = Values::NONE, string $deviceSid = Values::NONE): CreateCertificateOptions {
        return new CreateCertificateOptions($friendlyName, $deviceSid);
    }

    /**
     * @param string $deviceSid Find all Certificates authenticating specified
     *                          Device.
     * @return ReadCertificateOptions Options builder
     */
    public static function read(string $deviceSid = Values::NONE): ReadCertificateOptions {
        return new ReadCertificateOptions($deviceSid);
    }

    /**
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     * @return UpdateCertificateOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $deviceSid = Values::NONE): UpdateCertificateOptions {
        return new UpdateCertificateOptions($friendlyName, $deviceSid);
    }
}

class CreateCertificateOptions extends Options {
    /**
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     */
    public function __construct(string $friendlyName = Values::NONE, string $deviceSid = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Provides a human readable descriptive text for this Certificate credential, up to 256 characters long.
     *
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides the unique string identifier of an existing Device to become authenticated with this Certificate credential.
     *
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self {
        $this->options['deviceSid'] = $deviceSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.DeployedDevices.CreateCertificateOptions ' . \implode(' ', $options) . ']';
    }
}

class ReadCertificateOptions extends Options {
    /**
     * @param string $deviceSid Find all Certificates authenticating specified
     *                          Device.
     */
    public function __construct(string $deviceSid = Values::NONE) {
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Filters the resulting list of Certificates by a unique string identifier of an authenticated Device.
     *
     * @param string $deviceSid Find all Certificates authenticating specified
     *                          Device.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self {
        $this->options['deviceSid'] = $deviceSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.DeployedDevices.ReadCertificateOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateCertificateOptions extends Options {
    /**
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     */
    public function __construct(string $friendlyName = Values::NONE, string $deviceSid = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['deviceSid'] = $deviceSid;
    }

    /**
     * Provides a human readable descriptive text for this Certificate credential, up to 256 characters long.
     *
     * @param string $friendlyName The human readable description for this
     *                             Certificate.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides the unique string identifier of an existing Device to become authenticated with this Certificate credential.
     *
     * @param string $deviceSid The unique identifier of a Device to be
     *                          authenticated.
     * @return $this Fluent Builder
     */
    public function setDeviceSid(string $deviceSid): self {
        $this->options['deviceSid'] = $deviceSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = [];
        foreach ($this->options as $key => $value) {
            if ($value !== Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.DeployedDevices.UpdateCertificateOptions ' . \implode(' ', $options) . ']';
    }
}