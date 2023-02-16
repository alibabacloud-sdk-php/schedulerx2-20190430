<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class ExecuteWorkflowRequest extends Model
{
    /**
     * @description The ID of the application. You can obtain the application ID on the Application Management page in Distributed Task Scheduling Platform.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The dynamic parameter of the workflow instance. The parameter must be 1 to 1,000 bytes in length.
     *
     * @example test
     *
     * @var string
     */
    public $instanceParameters;

    /**
     * @description The ID of the namespace. You can obtain the ID of the namespace on the Namespace page in Distributed Task Scheduling Platform.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the workflow.
     *
     * @example 111
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'groupId'            => 'GroupId',
        'instanceParameters' => 'InstanceParameters',
        'namespace'          => 'Namespace',
        'namespaceSource'    => 'NamespaceSource',
        'regionId'           => 'RegionId',
        'workflowId'         => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceParameters) {
            $res['InstanceParameters'] = $this->instanceParameters;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceParameters'])) {
            $model->instanceParameters = $map['InstanceParameters'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
