# NHS Validation
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/veraz-ltd/nhs-number?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Everyone registered with the NHS in England and Wales has their own unique number. This is a simple class that validates those numbers so you can determine if they are valid or not.

> **Author**: Nathaniel Blackburn<br>
> **Version**: 1.0-stable<br>
> **Support**: support@nblackburn.uk<br>
> **Website**: http://nblackburn.uk<br>

## Return

When creating a new instance of the NHSNumber object, you have access to several properties.

| Property      | Type          | Description                               |
| ------------- | ------------- | ----------------------------------------- |
| number        | number        | The NHS number without the checkbit.      |
| length        | number        | The length of the NHS number.             |
| checkbit      | number        | The checkbit.                             |
| valid         | boolean       | The outcome of the validation.            |

## Example

```php
$number = new NHSNumber(3012468579);
$status = ($number->valid) ? 'valid' : 'invalid';

echo sprintf('This NHS number is %s', $status);
```
