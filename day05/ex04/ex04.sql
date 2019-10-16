update ft_table
set `craetion_date` = dateadd(`creation_date`, interval 20 years)
where `id` > 5;