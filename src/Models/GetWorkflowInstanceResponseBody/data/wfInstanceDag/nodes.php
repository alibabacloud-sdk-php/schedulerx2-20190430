<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $attempt;

    /**
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @example 2023-01-03 18:00:21
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1472
     *
     * @var int
     */
    public $jobId;

    /**
     * @example 24058796
     *
     * @var int
     */
    public $jobInstanceId;

    /**
     * @example code=200
     *
     * @var string
     */
    public $result;

    /**
     * @example 2023-01-03 18:00:03
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2023-01-03 18:00:03
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 10.163.0.101:34027
     *
     * @var string
     */
    public $workAddr;
    protected $_name = [
        'attempt'       => 'Attempt',
        'dataTime'      => 'DataTime',
        'endTime'       => 'EndTime',
        'jobId'         => 'JobId',
        'jobInstanceId' => 'JobInstanceId',
        'result'        => 'Result',
        'scheduleTime'  => 'ScheduleTime',
        'startTime'     => 'StartTime',
        'workAddr'      => 'WorkAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempt) {
            $res['Attempt'] = $this->attempt;
        }
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->workAddr) {
            $res['WorkAddr'] = $this->workAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempt'])) {
            $model->attempt = $map['Attempt'];
        }
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WorkAddr'])) {
            $model->workAddr = $map['WorkAddr'];
        }

        return $model;
    }
}
