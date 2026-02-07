# VisionTIR

VisionTIR is a Python package for vision and thermal infrared image analysis.

## Features

- Image processing and analysis
- Thermal infrared data handling
- Computer vision utilities
- Visualization tools

## Installation

### From source

```bash
git clone https://github.com/solerjorge/visiontir.git
cd visiontir
pip install -e .
```

### For development

```bash
pip install -e ".[dev]"
```

## Quick Start

```python
import visiontir

# Your code here
```

## Project Structure

```
visiontir/
├── src/
│   └── visiontir/          # Main package source code
│       └── __init__.py
├── tests/                   # Unit tests
│   └── __init__.py
├── docs/                    # Documentation
├── examples/                # Example scripts and notebooks
├── scripts/                 # Utility scripts
├── data/                    # Data directory (gitignored)
├── requirements.txt         # Production dependencies
├── requirements-dev.txt     # Development dependencies
├── pyproject.toml          # Project configuration
├── setup.py                # Setup script
└── README.md               # This file
```

## Development

### Running Tests

```bash
pytest
```

### Code Formatting

```bash
black src/ tests/
```

### Linting

```bash
flake8 src/ tests/
pylint src/
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Author

Jorge Soler

## Contact

For questions or support, please open an issue on GitHub.