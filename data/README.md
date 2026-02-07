# Data Directory

This directory is for storing data files used in the project.

## Structure

- `raw/` - Raw, unprocessed data files
- `processed/` - Processed data files ready for analysis

## Note

Data files are typically large and should not be committed to git. 
The `.gitignore` file is configured to exclude data files while keeping the directory structure.

## Data Management

- Keep raw data in `raw/` directory
- Store processed data in `processed/` directory
- Document data sources and preprocessing steps
- Consider using data version control tools like DVC for large datasets
