# TODO: Add Completed Challenges Flags to Users Table

## Tasks
- [ ] Create migration to add `completed_all_challenges_today` and `completed_all_challenges_yesterday` boolean fields, and remove unused `total_lifetime_points` field
- [ ] Update User model to include new fields in fillable and casts, remove total_lifetime_points from fillable
- [ ] Run the migration to apply database changes

## Notes
- The fields `completed_all_challenges_today` and `completed_all_challenges_yesterday` are referenced in ChallengeCenter.php but not yet in the database
- `total_lifetime_points` appears to be unused as the code uses `eco_points` for total points
