CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assign_roles`
AS SELECT
   `users`.`id` AS `id`,
   `users`.`email` AS `email`,group_concat(`roles`.`name` separator ',') AS `roles`
FROM ((`users` left join `model_has_roles` on((`users`.`id` = `model_has_roles`.`model_id`))) left join `roles` on((`model_has_roles`.`role_id` = `roles`.`id`))) group by `users`.`id`,`users`.`email`;