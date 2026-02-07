# Contributing to VisionTIR

Thank you for your interest in contributing to VisionTIR! We welcome contributions from the community.

## How to Contribute

### Reporting Bugs

If you find a bug, please open an issue on GitHub with:
- A clear title and description
- Steps to reproduce the issue
- Expected behavior
- Actual behavior
- Your environment (OS, Python version, etc.)

### Suggesting Features

Feature suggestions are welcome! Please open an issue with:
- A clear description of the feature
- Use cases for the feature
- Any implementation ideas you have

### Pull Requests

1. Fork the repository
2. Create a new branch for your feature (`git checkout -b feature/amazing-feature`)
3. Make your changes
4. Add tests for your changes
5. Run the test suite to ensure everything passes
6. Format your code with `black`
7. Lint your code with `flake8` and `pylint`
8. Commit your changes (`git commit -m 'Add some amazing feature'`)
9. Push to the branch (`git push origin feature/amazing-feature`)
10. Open a Pull Request

## Development Setup

1. Clone the repository:
```bash
git clone https://github.com/solerjorge/visiontir.git
cd visiontir
```

2. Install development dependencies:
```bash
pip install -e ".[dev]"
```

3. Run tests:
```bash
pytest
```

4. Format code:
```bash
black src/ tests/
```

5. Lint code:
```bash
flake8 src/ tests/
pylint src/
```

## Code Style

- Follow PEP 8 guidelines
- Use meaningful variable and function names
- Add docstrings to functions and classes
- Keep functions focused and small
- Write tests for new functionality

## Testing

- Write unit tests for new features
- Ensure all tests pass before submitting a PR
- Aim for high code coverage

## Documentation

- Update documentation for new features
- Add docstrings following NumPy/Google style
- Update README.md if necessary

## Questions?

Feel free to open an issue for any questions about contributing.

Thank you for contributing to VisionTIR!
