//--------------------------------------------------------------------------------
// robot will wave hello in standing position
//--------------------------------------------------------------------------------
void say_hello(void)
{
  angle_1A(105); angle_1B(80); angle_1C(130);
  _delay_ms(700); angle_1C(110);
  _delay_ms(700); angle_1C(130);
  _delay_ms(700); angle_1C(110);
  _delay_ms(700); angle_1C(130);
  _delay_ms(700); angle_1C(110);
  _delay_ms(700); angle_1C(130);
  _delay_ms(700);
  angle_1A(90); angle_1B(145); angle_1C(120);

}
