This document defines repo-level guidelines for AI coding agents and automated tools working on this project. Human
contributors should follow the branch naming, testing, and PR conventions outlined below.

# How to work with git (for all changes)

### Branch Mapping & Naming
- **Base Branch**: `master`
- **Branch Naming**: Use clear, descriptive names prefixed by change type:
    - `feature/<short_description>` (e.g., `feature/add_button_recent_events`)
    - `bugfix/<short_description>`
    - `docs/<short_description>`
    - `refactor/<short_description>`
    - `hotfix/<short_description>`
    - Use underscores in `<short_description>`.
- Never commit directly to `master`.
- Never force push (`git push --force`) to shared primary branches like `master`.

## PR description checklist
- What changed and why.
- Any migration/compat notes.
- How it was verified (tests/steps).

---

# Project requirements
All functional/non-functional requirements, and mandatory testing scenarios live in:
- `spec.md`

## Maintaining `spec.md` (Mandatory)
Before or alongside any code implementation:
1. **Spec Sync**: If a task introduces, modifies, or removes functional or non-functional requirements, update `spec.md` FIRST (or in the same commit) to reflect the exact state of the system.
2. **Test Scenario Sync**: Ensure corresponding happy-path and edge-case testing requirements are updated in `spec.md`.
3. **No Unspecified Drift**: Never implement functional behavior that directly contradicts `spec.md`. If a user request conflicts with `spec.md`, update `spec.md` to match the user's explicit intent.

---

## Testing coverage expectation (MUST)
For **every code change** that affects behavior:
- Include **happy-path** tests (expected successful flow).
- Include **negative tests** for failure modes/invalid inputs/edge cases.
- Avoid placeholder or truncated tests; tests must assert observable behavior and error handling (not internal implementation details).

---

## Design + code readability (priority order)
- **SRP + proven patterns**: apply single-responsibility and established patterns where they naturally fit.
- **Readability first**: prefer straightforward control flow, clear naming, and minimal indirection.
- **Maintainability next**: keep code easy to reason about and modify safely.
- Then modularity/testability/extendability: introduce small, focused modules only when they improve testability or future change safety.
- Avoid large framework-style abstractions unless required for correctness or significant reuse.

---

## Code Modification Rules
- **No Unrequested Refactoring**: Modify ONLY code related to the explicit task. Do not reformat untouched files or rewrite working logic unless requested or strictly necessary for the change.
- **No Residual Code**: Remove dead code, unused imports, temporary console logs/print statements, and commented-out code snippets before asking for review. Do not remove any commented-out code that was already present. Remove only those that you've added.
- **Environment & Secrets**: Never expose hardcoded credentials, API keys, or environment-specific values. Always use environment variables (`.env`).

---

## Error Handling & Debugging
- Do not suppress errors with empty `catch` blocks or silent fallbacks unless explicitly directed.
- Fail early and provide actionable error messages when invariant conditions are violated.

---

## Communication with User
- Keep explanations brief and focused on architectural or functional decisions.
- When presenting completed work, list:
    1. Files changed.
    2. Brief summary of the implementation.
    3. Commands run to verify/test the change.

---

## Skill Maintenance Protocol

- Whenever you make changes to public APIs, core architecture, factory methods, configuration options, or breaking changes, you MUST update `SKILL.md` to reflect those changes.
- Ensure all code snippets, edge cases, and "DO NOT" rules in `SKILL.md` remain strictly accurate and synchronized with the codebase.
