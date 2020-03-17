<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property array[] $activityStatistics
 * @property int $totalWorkers
 * @property string $workspaceSid
 * @property string $url
 */
class WorkersRealTimeStatisticsInstance extends InstanceResource {
    /**
     * Initialize the WorkersRealTimeStatisticsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace that contains the
     *                             Workers
     */
    public function __construct(Version $version, array $payload, string $workspaceSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'activityStatistics' => Values::array_get($payload, 'activity_statistics'),
            'totalWorkers' => Values::array_get($payload, 'total_workers'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['workspaceSid' => $workspaceSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkersRealTimeStatisticsContext Context for this
     *                                          WorkersRealTimeStatisticsInstance
     */
    protected function proxy(): WorkersRealTimeStatisticsContext {
        if (!$this->context) {
            $this->context = new WorkersRealTimeStatisticsContext(
                $this->version,
                $this->solution['workspaceSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a WorkersRealTimeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkersRealTimeStatisticsInstance Fetched
     *                                           WorkersRealTimeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): WorkersRealTimeStatisticsInstance {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkersRealTimeStatisticsInstance ' . \implode(' ', $context) . ']';
    }
}