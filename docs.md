## Table of contents

- [\Fundamental\Delegation\MiddleDeveloper](#class-fundamentaldelegationmiddledeveloper)
- [\Fundamental\Delegation\DelegationInterface (interface)](#interface-fundamentaldelegationdelegationinterface)
- [\Fundamental\Delegation\TeamLead](#class-fundamentaldelegationteamlead)
- [\Fundamental\Delegation\DeveloperInterface (interface)](#interface-fundamentaldelegationdeveloperinterface)
- [\Fundamental\Delegation\JuniorDeveloper](#class-fundamentaldelegationjuniordeveloper)

<hr />

### Class: \Fundamental\Delegation\MiddleDeveloper

> Class MiddleDeveloper

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>void</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)*

<hr />

### Interface: \Fundamental\Delegation\DelegationInterface

> Interface DelegationInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delegateTo(</strong><em>[\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)</em> <strong>$developer</strong>)</strong> : <em>void</em> |
| public | <strong>getCodeFromDeveloper()</strong> : <em>mixed</em> |

<hr />

### Class: \Fundamental\Delegation\TeamLead

> Class TeamLead

| Visibility | Function |
|:-----------|:---------|
| public | <strong>delegateTo(</strong><em>[\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)</em> <strong>$developer</strong>)</strong> : <em>void</em> |
| public | <strong>getCodeFromDeveloper()</strong> : <em>mixed</em> |
| public | <strong>writeCode()</strong> : <em>void</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface), [\Fundamental\Delegation\DelegationInterface](#interface-fundamentaldelegationdelegationinterface)*

<hr />

### Interface: \Fundamental\Delegation\DeveloperInterface

> Interface DeveloperInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>void</em> |

<hr />

### Class: \Fundamental\Delegation\JuniorDeveloper

> Class JuniorDeveloper

| Visibility | Function |
|:-----------|:---------|
| public | <strong>writeCode()</strong> : <em>void</em> |

*This class implements [\Fundamental\Delegation\DeveloperInterface](#interface-fundamentaldelegationdeveloperinterface)*

