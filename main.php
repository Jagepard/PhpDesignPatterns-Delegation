<?php

namespace Fundamental\Delegation;

require_once "vendor/autoload.php";

$teamLead = new TeamLead();
$teamLead->delegateTo($teamLead);
printf("%s\n", $teamLead->getCodeFromDeveloper());

$teamLead->delegateTo(new MiddleDeveloper());
printf("%s\n", $teamLead->getCodeFromDeveloper());

$teamLead->delegateTo(new JuniorDeveloper());
printf("%s\n", $teamLead->getCodeFromDeveloper());
