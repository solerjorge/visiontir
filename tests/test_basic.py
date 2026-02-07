"""
Basic test to verify package structure
"""
import pytest


def test_import():
    """Test that the package can be imported"""
    import visiontir
    assert visiontir is not None


def test_version():
    """Test that version is defined"""
    import visiontir
    assert hasattr(visiontir, '__version__')
    assert visiontir.__version__ == '0.1.0'


def test_author():
    """Test that author is defined"""
    import visiontir
    assert hasattr(visiontir, '__author__')
