����   4 � Z
 - [ \
  ]	 , ^	 , _
 ` a
  a
 ` b
  b c
  d
  e
  f g
  h
  i j
 k l
 k m
 n o p q
  r s
  t
  u v
 k w
  x
  u y z {  |
 } ~ 	 n �
 � �
  � �
  �
  � � � tee CLorg/apache/derby/iapi/services/io/AccessibleByteArrayOutputStream; <init> (Ljava/io/OutputStream;)V Code LineNumberTable LocalVariableTable this <Lorg/apache/derby/iapi/services/io/DebugByteTeeOutputStream; out Ljava/io/OutputStream; write (I)V b I 
Exceptions � ([BII)V [B off len checkObject 1(Lorg/apache/derby/iapi/services/io/Formatable;)V err_msg Ljava/lang/String; t Ljava/lang/Throwable; f .Lorg/apache/derby/iapi/services/io/Formatable; in Ljava/io/ByteArrayInputStream; fin 7Lorg/apache/derby/iapi/services/io/FormatIdInputStream; f1 StackMapTable c g j p � � q 
SourceFile DebugByteTeeOutputStream.java 3org/apache/derby/shared/common/sanity/SanityManager 0 1 Aorg/apache/derby/iapi/services/io/AccessibleByteArrayOutputStream 0 : . / 7 8 � 9 : 9 ? java/io/ByteArrayInputStream � � � � 0 ? 5org/apache/derby/iapi/services/io/FormatIdInputStream 0 � � � ,org/apache/derby/iapi/services/io/Formatable � � � � � � � � java/lang/Throwable java/lang/StringBuilder 0 �  FormatableError:read error    :  � � � � !
FormatableError:class written :  � � � � !FormatableError:read back as null  FormatableError:class read    :   FormatableError:write id      :  � � � � �  FormatableError:read id       :  7 � � � � � � DebugByteTeeOutputStream � � � � :org/apache/derby/iapi/services/io/DebugByteTeeOutp