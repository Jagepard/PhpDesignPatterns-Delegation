## Table of contents

- [\Fundamental\Delegation\ProgramInterface (interface)](#interface-fundamentaldelegationprograminterface)
- [\Fundamental\Delegation\MiddleDeveloper](#class-fundamentaldelegationmiddledeveloper)
- [\Fundamental\Delegation\DelegationInterface (interface)](#interface-fundamentaldelegationdelegationinterface)
- [\Fundamental\Delegation\TeamLead](#class-fundamentaldelegationteamlead)
- [\Fundamental\Delegation\DeveloperInterface (interface)](#interface-fundamentaldelegationdeveloperinterface)
- [\Fundamental\Delegation\JuniorDeveloper](#class-fundamentaldelegationjuniordeveloper)
- [\Fundamental\Delegation\Program](#class-fundamentaldelegationprogram)

<hr />

### Interface: \Fundamental\Delegation\ProgramInterface

> Interface ProgramInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getType()</strong> : <em>string</em> |

<hr />

### Class: \Fundamental\Delegation\MiddleDeveloper

> Class MiddleDeveloper

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>string</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)*

<hr />

### Interface: \Fundamental\Delegation\DelegationInterface

> Interface DelegationInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delegateTo(</strong><em>[\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)</em> <strong>$developer</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Fundamental\Delegation\TeamLead

> Class TeamLead

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delegateTo(</strong><em>[\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)</em> <strong>$developer</strong>)</strong> : <em>void</em> |
| public | <strong>getCodeFromDeveloper()</strong> : <em>string</em> |
| public | <strong>getDeveloper()</strong> : <em>[\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)</em> |
| public | <strong>writeCode()</strong> : <em>string</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface), [\Fundamental\Delegation\DelegationInterface](#interface-fundamentaldelegationdelegationinterface)*

<hr />

### Interface: \Fundamental\Delegation\DeveloperInterface

> Interface DeveloperInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>string</em> |

<hr />

### Class: \Fundamental\Delegation\JuniorDeveloper

> Class JuniorDeveloper

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>string</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)*

<hr />

### Class: \Fundamental\Delegation\Program

> Class Program

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$type</strong>)</strong> : <em>void</em><br /><em>Program constructor.</em> |
| public | <strong>getType()</strong> : <em>mixed</em> |

*This class implements [\Fundamental\Delegation\ProgramInterface](#interface-fundamentaldelegationprograminterface)*

