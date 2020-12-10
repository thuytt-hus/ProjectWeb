/*
 * bai_7.c
 *
 * Created: 11/6/2020 9:12:37 AM
 * Author: hoangi19
 */

/*
  bam bt1 servo qua goc 90
*/

#include <glcd.h>
#include <io.h>
#include <delay.h>
#include <stdio.h>
#include <font5x7.h>
#include <stdlib.h>

#define servo PORTC.7
#define bt1 PINB.2
#define bt2 PINB.3

#define LED_G PORTD.5

int dem;
char vitri = 150;
float goc = 0.0;
unsigned char buffer[10];
GLCDINIT_t glcd_init_data;

interrupt [TIM0_OVF] void timer0_ovf_isr(void)
{
// Reinitialize Timer 0 value
TCNT0=0xB0;    // tao ra don vi 0.01ms
// Place your code here
dem++;
if (dem == 2000) dem = 0;
if (dem < vitri) servo = 1;
else servo = 0;    
}



void main(void)
{

DDRC = 0x80;
PORTB = 0x8C;
DDRB = 0x00;

DDRD = 0xA0;          // 1010 0000
PORTD = 0x00;
PORTD.7 = 0;

// Timer/Counter 0 initialization
// Clock source: System Clock
// Clock value: 8000.000 kHz
// Mode: Normal top=0xFF
// OC0 output: Disconnected
// Timer Period: 0.01 ms
ASSR=0<<AS0;
TCCR0=(0<<WGM00) | (0<<COM01) | (0<<COM00) | (0<<WGM01) | (0<<CS02) | (0<<CS01) | (1<<CS00);
TCNT0=0xB0;
OCR0=0x00;
// Timer(s)/Counter(s) Interrupt(s) initialization
TIMSK=(0<<OCIE2) | (0<<TOIE2) | (0<<TICIE1) | (0<<OCIE1A) | (0<<OCIE1B) | (0<<TOIE1) | (0<<OCIE0) | (1<<TOIE0);
ETIMSK=(0<<TICIE3) | (0<<OCIE3A) | (0<<OCIE3B) | (0<<TOIE3) | (0<<OCIE3C) | (0<<OCIE1C);

#asm("sei")


glcd_init_data.font=font5x7;
glcd_init_data.temp_coef=90; // thay doi dc
glcd_init_data.bias = 4; // thay doi dc
glcd_init_data.vlcd=60; // thay doi dc
glcd_init(&glcd_init_data);
glcd_clear();
glcd_outtextxy(10, 10, "0.0");

while (1)
    {
        if (bt1 == 0)
        {   
            delay_ms(50);
            vitri++;
            goc = goc + 1.8;
            if (vitri == 200)
            {
                vitri = 150;
                goc = 0.0;
            }
            //vitri = 150; // vi tri 90 do 
            ftoa(goc, 3, buffer);
            glcd_outtextxy(10,10,buffer); 
        }
        
        if (bt2 == 0)
        {   
            delay_ms(50);
            vitri--;
            goc = goc - 1.8;
            if (vitri == 100)
            {
                vitri = 150;
                goc = 0.0;
                
            }
            ftoa(goc, 3, buffer);
            glcd_outtextxy(10,10,buffer);
            //vitri = 175; //servo quay goc 135
        }

    }
}
