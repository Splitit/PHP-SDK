# Security Policy

## Supported Versions

We are committed to ensuring the security of our SDKs, plugins, and open-source projects. Only the versions listed below receive active security updates. Older versions may continue to function but are **not** guaranteed to receive patches for vulnerabilities.

| Version | Supported |
|---------|------------|
| 0.0.51  | ✅         |

## Reporting a Vulnerability

We take the security of Splitit projects seriously. If you discover a security vulnerability, please report it responsibly and privately.

⚠️ **Do not disclose security vulnerabilities via public GitHub issues, pull requests, or discussions.**

### How to Report
- Please use GitHub's **[Private Vulnerability Reporting](https://github.com/Splitit/PHP-SDK/security/advisories/new)** feature for the affected repository.
- Alternatively, if GitHub’s feature is unavailable, you can contact our security team at **security@splitit.com**.
- Include as much detail as possible:
  - Affected project and version
  - Description of the vulnerability
  - Steps to reproduce
  - Potential impact
  - Suggested mitigation (if available)

We will acknowledge receipt of your report within **5 business days** and strive to provide an update on remediation progress within **10 business days**.

## Security Best Practices for Users

- Always use the **latest supported version** of the SDK or plugin.
- Rotate any credentials, tokens, or API keys regularly.
- Avoid sharing logs or stack traces containing sensitive information when reporting issues.
- Follow the [Splitit Documentation](https://www.splitit.com/developers/) for secure integration guidance.

## Security Best Practices for Contributors

- Do not include secrets (API keys, credentials, tokens) in code, commits, or tests.
- Validate all input and sanitize outputs where applicable.
- Run security checks locally before submitting pull requests.
- Review dependencies for known vulnerabilities before adding them.
- Flag any potential security concerns during code reviews.

## Responsible Disclosure

We kindly ask all researchers and contributors to adhere to responsible disclosure:
- Allow our team sufficient time to investigate and address the issue.
- Do not publicly share details of the vulnerability until a fix has been released.
- We will credit researchers who report valid vulnerabilities (unless you prefer to remain anonymous).
