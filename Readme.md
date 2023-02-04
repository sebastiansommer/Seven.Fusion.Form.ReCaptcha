# ReCaptcha Elements for Fusion Forms
Provides two elements (V2 + V3) for the Fusion Forms package to use Google's ReCaptcha service.

## Installation
```
composer require 7sg/fusion-form-recaptcha
```

## Configuration
Add the following to your `Settings.yaml`:
```yaml
Seven:
  Fusion:
    Form:
      ReCaptcha:
        siteKey: 'SOME_SITE_KEY'
        secretKey: 'SOME_SECRET_KEY'
```

## Add Elements to your Form
**Please notice:** Its currently only possible to use one ReCaptcha element per page.

### V2 (Verify requests with a score)
```HTML
<Seven.Fusion.Form.ReCaptcha:ReCaptchaV2/>
```

### V3 (Verify requests with a score)
This version requires an action name to be passed to the element.

```HTML
 <Seven.Fusion.Form.ReCaptcha:ReCaptchaV3 action="Your action name"/>
```

## License
Licensed under MIT
