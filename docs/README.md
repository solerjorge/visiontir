# Documentation

This directory contains the documentation for VisionTIR.

## Building Documentation

To build the documentation locally:

```bash
cd docs
pip install -r requirements.txt
make html
```

The built documentation will be available in `docs/_build/html/`.

## Structure

- `source/` - Documentation source files
- `_build/` - Built documentation (gitignored)
- `requirements.txt` - Documentation dependencies

## Writing Documentation

Documentation is written in reStructuredText and built with Sphinx.

For more information on Sphinx documentation, visit: https://www.sphinx-doc.org/
