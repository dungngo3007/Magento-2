<?php

namespace Custom\CaseStudy\Api\Data;

interface CaseStudyInterface
{
    public function getCaseStudyId();
    public function setCaseStudyId(int $caseStudyId);
    public function getTitle();
    public function setTitle(string $title);
    public function getDescription();
    public function setDescription(string $description);
    public function getCreatedAt();
    public function setCreatedAt(string $createdAt);
    public function getUpdatedAt();
    public function setUpdatedAt(string $updatedAt);
}
