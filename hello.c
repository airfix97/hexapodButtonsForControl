//--------------------------------------------------------------------------------
// robot will wave hello in standing position
//--------------------------------------------------------------------------------
void say_hello(void)
{
  angle_1A(105); angle_1B(90); angle_1C(120);
  _delay_ms(250);
  angle_1C(110);
  _delay_ms(150);
  angle_1C(120);
  _delay_ms(150);
  angle_1C(110);
  _delay_ms(150);
  angle_1C(120);
  _delay_ms(150);
  angle_1C(110);
  _delay_ms(150);
  angle_1C(120);
  _delay_ms(250);
  angle_1A(90); angle_1B(145); angle_1C(120);

}
