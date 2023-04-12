## Table of contents
- [Fundamental\Delegation\DelegationInterface](#fundamental_delegation_delegationinterface)
- [Fundamental\Delegation\DeveloperInterface](#fundamental_delegation_developerinterface)
- [Fundamental\Delegation\JuniorDeveloper](#fundamental_delegation_juniordeveloper)
- [Fundamental\Delegation\MiddleDeveloper](#fundamental_delegation_middledeveloper)
- [Fundamental\Delegation\Program](#fundamental_delegation_program)
- [Fundamental\Delegation\ProgramInterface](#fundamental_delegation_programinterface)
- [Fundamental\Delegation\TeamLead](#fundamental_delegation_teamlead)
<hr>

<a id="fundamental_delegation_delegationinterface"></a>

### Class: Fundamental\Delegation\DelegationInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>delegateTo</strong>( Fundamental\Delegation\DeveloperInterface $developer ): void</em><br>|


<a id="fundamental_delegation_developerinterface"></a>

### Class: Fundamental\Delegation\DeveloperInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>writeCode</strong>(): string</em><br>|


<a id="fundamental_delegation_juniordeveloper"></a>

### Class: Fundamental\Delegation\JuniorDeveloper
##### implements [Fundamental\Delegation\DeveloperInterface](#fundamental_delegation_developerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>writeCode</strong>(): string</em><br>Writes program code<br>Пишет код программы|


<a id="fundamental_delegation_middledeveloper"></a>

### Class: Fundamental\Delegation\MiddleDeveloper
##### implements [Fundamental\Delegation\DeveloperInterface](#fundamental_delegation_developerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>writeCode</strong>(): string</em><br>Writes program code<br>Пишет код программы|


<a id="fundamental_delegation_program"></a>

### Class: Fundamental\Delegation\Program
##### implements [Fundamental\Delegation\ProgramInterface](#fundamental_delegation_programinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $code )</em><br>Adds code<br>Добавляет программный код|
|public|<em><strong>getCode</strong>(): string</em><br>Gets the code<br>Получает код|


<a id="fundamental_delegation_programinterface"></a>

### Class: Fundamental\Delegation\ProgramInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getCode</strong>(): string</em><br>|


<a id="fundamental_delegation_teamlead"></a>

### Class: Fundamental\Delegation\TeamLead
##### implements [Fundamental\Delegation\DeveloperInterface](#fundamental_delegation_developerinterface)
##### implements [Fundamental\Delegation\DelegationInterface](#fundamental_delegation_delegationinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>delegateTo</strong>( Fundamental\Delegation\DeveloperInterface $developer ): void</em><br>Delegates a task to another developer<br>Делегирует задачу другому разработчику|
|public|<em><strong>writeCode</strong>(): string</em><br>Writes program code<br>Пишет код программы|
|public|<em><strong>getCodeFromDeveloper</strong>(): string</em><br>Gets another developer's code<br>Получает код другого разработчика|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
