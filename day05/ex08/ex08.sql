select `last_name`, `first_name`, date(`birthdate`) as `birthdate`
from `user_card` where `birthdate` = 1989
order by `last_name` asc;