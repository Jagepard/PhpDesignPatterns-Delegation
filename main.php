<?php

namespace Fundamental\Delegation;

require_once "vendor/autoload.php";

$teamLead = new TeamLead();
printf("%s\n", $teamLead->writeCode());

$teamLead->delegateTo(new MiddleDeveloper());
printf("%s\n", $teamLead->getCodeFromDeveloper());

$teamLead->delegateTo(new JuniorDeveloper());
printf("%s\n", $teamLead->getCodeFromDeveloper());
