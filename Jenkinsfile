pipeline {
	agent none
	stages {
		stage('Checkout SCM') {
			steps {
				git 'https://github.com/brandonneo/jenkins-php-selenium-test.git'
			}
		}
		stage('Integration UI Test') {
				stage('Deploy') {
					agent any
				}
		}
	}
}
