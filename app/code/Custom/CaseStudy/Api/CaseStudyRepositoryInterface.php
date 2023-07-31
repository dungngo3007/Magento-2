<?php

namespace Custom\CaseStudy\Api;

use Custom\CaseStudy\Api\Data\CaseStudyInterface;

interface CaseStudyRepositoryInterface
{
    public function save(CaseStudyInterface $caseStudy);

    public function getById(int $caseStudyId);

    public function delete(CaseStudyInterface $caseStudy);
}
