<?php

namespace iEducar\Support\Exceptions;

class Error
{
    const MISSING_STAGE_DEFAULT_ERROR = 1000;
    const MISSING_STAGE_TEACHER_ERROR = 1001;
    const MISSING_STAGE_COORDINATOR_ERROR = 1002;
    const SCORE_GREATER_THAN_MAX_ALLOWED = 1003;
    const SCORE_LESSER_THAN_MIN_ALLOWED = 1004;
    const EXAM_SCORE_GREATER_THAN_MAX_ALLOWED = 1005;
    const STUDENT_NOT_ENROLLED_IN_SCHOOL_CLASS = 1006;
    const EVALUATION_RULE_NOT_DEFINED_IN_LEVEL = 1007;
    const EVALUATION_RULE_NOT_ALLOW_GENERAL_ABSENCE = 1008;
    const DISCIPLINE_NOT_ENROLLED_IN_SCHOOL_LEVELS = 1009;
    const DISCIPLINE_NOT_EXISTS_FOR_SCHOOL_CLASS = 1010;
    const SCHOOL_CLASS_DOESNT_ALOW_FREQUENCY_BY_DISCIPLINE = 1011;
}