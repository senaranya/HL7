# How to work with git (for all changes)

## Branching & Git Flow Requirements
All branch creation, merging, and cleanup MUST be performed using `git flow` commands. Do NOT run standard `git checkout -b`, `git switch -c`, `git merge`, or `git branch -d`.

### Branch Mapping & Naming
- **Features / Bug fixes / Docs / Refactor**: 
  - Base: `develop`
  - Command: `git flow <feature|bugfix|docs> start <short_description>`
  - Note: Pass only `<short_description>` (use underscores, e.g., `add_button_recent_events`). Do NOT manually prefix with `feature/`—`git flow` appends this automatically.

## Workflow
1. **Start Branch**: Run `git flow <type> start <short_description>` (where `type` is one of `feature`/`bugfix`/`hotfix`). If `git flow` is not installed or available, report the error to the user and abort immediately.
2. **Make Changes**: Make changes for the current task at hand. Do not commit yet. Wait for the user to review your changes
3. Once user approves, commit the files. Keep commits small and focused.
4. **Check Remote & Push**: 
   - First, run `git remote` to check if a remote repository is configured.
   - **If no remote exists (empty output)**: Skip pushing and PR creation. Notify the user that local changes are ready and waiting for local review/testing.
   - **If a remote is configured** (e.g., `origin` is listed): Push the branch to the remote using `git push -u <remote_name> <branch_name>`.
5. **PR / MR Creation**:
   - **Only if a remote exists**: Open a PR/MR targeting `develop`.
   - **If operating in a local-only repository**: Skip PR/MR creation and ask the user to review local commits directly.
6. **Review**: Wait for user review and testing approval.
7. **Finish Branch**: Once approved, run `git flow <type> finish <short_description>` to handle merging and branch cleanup automatically.

### Strictly Forbidden Operations
- Never commit directly to `master`/`main` or `develop`.
- Never use raw Git commands (`git checkout -b`, `git switch -c`, `git merge`, `git branch -d`) for flow operations.

### Mandatory git-flow enforcement
- All feature, bugfix, and release branch creation MUST use `git flow`.
- Completion, merge, and branch deletion MUST use the matching `git flow <type> finish` command.
- If `git flow` fails or encounters an edge case, stop and report the blocker to the user rather than falling back to standard Git commands.

## When you might not need a new branch
- If you are **already** on the correct branch that will contain the change (e.g., a feature branch already created for this ongoing task), you may reuse it.

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

# Initialization & Spec Generation
- **On-Demand Only**: Do NOT automatically create, initialize, or overwrite `spec.md` when opening a repository or starting a task.
- **Trigger Condition**: Only generate or scaffold `spec.md` (using `spec-template.md` as your structural blueprint) when the user issues an **explicit instruction** to do so (e.g., *"Generate our spec.md file"*). If `spec-template.md` file is not present in the project root, abort with a message to the user.
- **Execution**: When explicitly triggered, inspect the existing codebase or project description to fill out all sections cleanly with realistic, project-specific details.

---

## Skill Maintenance Protocol

If `SKILL.md` exists in the repository root:
- Whenever you make changes to public APIs, core architecture, factory methods, configuration options, or breaking changes, you MUST update `SKILL.md` to reflect those changes.
- Ensure all code snippets, edge cases, and "DO NOT" rules in `SKILL.md` remain strictly accurate and synchronized with the codebase.
- If `SKILL.md` does not exist in the repository root, ignore this requirement.
